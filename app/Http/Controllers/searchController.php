<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class searchController extends Controller
{
    public function search(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $products = DB::table('users')->where('name', 'LIKE', '%' . $request->search . '%')->get();
            if ($products) {
                foreach ($products as $key => $product) {
                    $output .= '<tr>
                    <td>' . $product->id . '</td>
                    <td>' . $product->name . '</td>
                    </tr>';
                }
            }
            
            return Response($output);
        }
    }
}
