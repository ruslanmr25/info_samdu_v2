<?php

namespace App\Http\Controllers;


use App\Models\Student;

use Illuminate\Http\Request;

class Search extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        $query = Student::query();

        if ($request->students) {

            foreach ($request->students as $key => $value) {

                $query->where($key, 'LIKE', '%' . $value . '%');
            }
        }




        if ($request->educational_information) {

            foreach($request->educational_information as $key=>$value){

                $query->whereRelation('educational_information', function ($educ_query) use ($key,$value) {
                    if($key=='department_id'){
                        return $educ_query->where($key, $value);

                    }

                    return $educ_query->where($key, 'LIKE', '%' . $value . '%');
                });
            }


        }

        if ($request->addtional_information) {

            foreach($request->addtional_information as $key=>$value){

                $query->whereRelation('addtional_information', function ($additional_query) use ($key,$value) {


                    return $additional_query->where($key, 'LIKE', '%' . $value . '%');
                });
            }


        }



        return $query->with('educational_information')->paginate();






    }
}
