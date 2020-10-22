<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;

class DownloadController extends Controller
{
    public function all(){

        $fileName = 'testrequests.csv';
        $applications = Application::all();

        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $columns = array('id', 'name', 'contact','fever','cough','division','district','upazilla','status','created_at','updated_at');

        $callback = function() use($applications, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($applications as $application) {
                $row['id']  = $application->id;
                $row['name']    = $application->name;
                $row['contact']    = $application->contact;
                $row['fever']    = $application->fever;
                $row['cough']    = $application->cough;
                $row['division']    = $application->division->first()->name;
                $row['district']    = $application->district->first()->name;
                $row['upazilla']    = $application->upazilla->first()->name;
                $row['status']    = $application->status->first()->description;
                $row['created_at']  = $application->created_at;
                $row['updated_at']  = $application->updated_at;


                fputcsv($file, array($row['id'], $row['name'], $row['contact'], $row['fever'],$row['cough'],$row['division'],$row['district'],$row['upazilla'],$row['status'], $row['created_at'],$row['updated_at']));
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);

    }
}
