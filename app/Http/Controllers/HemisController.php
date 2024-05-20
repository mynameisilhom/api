<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class HemisController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse|RedirectResponse
    {
        try {
            $client = new Client();
            $response = $client->request('GET', 'https://student.andmiedu.uz/rest/v1/data/department-list?limit=200', [
                'headers' => [
                    'Accept' => 'application/json',
                    'Authorization' => 'Bearer tpuvYyIxKsrNt_C00LbkmcDAxu6strGr',
                    'Content-Type' => 'application/json',
                ],
            ]);

            $data = json_decode($response->getBody(), true);

            if (isset($data['data']['items']) && is_array($data['data']['items'])) {
//                DB::beginTransaction();
                usort($data['data']['items'], function ($a, $b) {
                    return ($a['structureType']['code'] ?? 0) <=> ($b['structureType']['code'] ?? 0);
                });
                DB::beginTransaction();
                foreach ($data['data']['items'] as $item) {
                    Department::query()->updateOrCreate(
                        ['id' => $item['id']],
                        [
                            'name' => $item['name'] ?? null,
                            'code' => $item['code'] ?? null,
                            'structure_type_code' => $item['structureType']['code'] ?? null,
                            'structure_type_name' => $item['structureType']['name'] ?? null,
                            'locality_type_code' => $item['localityType']['code'] ?? null,
                            'locality_type_name' => $item['localityType']['name'] ?? null,
                            'parent' => $item['parent'] ?? null,
                            'active' => $item['active'] ?? null,
                        ]
                    );
                }

                DB::commit();
            } else {
                throw new Exception('Некорректные данные в ответе API');
            }

            return Redirect::to('http://127.0.0.1:8000/api/v1/documentation');
        } catch (RequestException $e) {
            Log::error('Ошибка HTTP запроса: ' . $e->getMessage());
            return response()->json(['error' => 'Ошибка HTTP запроса'], 500);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Произошла ошибка: ' . $e->getMessage());
            return response()->json(['error' => 'Произошла ошибка'], 500);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
