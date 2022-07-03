<?php

namespace App\Http\Controllers;


use App\Models\Pressures;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * @OA\Get(
 *      path="/api/property/all",
 *      operationId="getAllProperties",
 *      tags={"Get"},

 *      summary="Récupéré la liste des propriétés",
 *      description="Retourne la liste complète de toute les propriétés.",
 *      @OA\Response(
 *          response=200,
 *          description="Opération réussis",
 *          @OA\MediaType(
 *           mediaType="application/json",
 *      )
 *      ),
 *      @OA\Response(
 *          response=401,
 *          description="Non authentifié",
 *      ),
 *      @OA\Response(
 *          response=403,
 *          description="Accès refusé"
 *      ),
 * @OA\Response(
 *      response=400,
 *      description="Requête erroné"
 *   ),
 * @OA\Response(
 *      response=404,
 *      description="Page introuvable"
 *   ),
 *  )
 */

class PressuresController extends Controller
{

    public function all()
    {
        $properties = response()
            ->json(Pressures::all());
        return $properties;
    }

}