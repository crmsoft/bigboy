<?php

/**
 * Created.
 * User: ahtem
 * Date: 12/29/14
 * Time: 2:35 PM
 */

class RestController extends BaseController{

    /**
     * @return mixed
     */
    public function postJsonFile(){
        try
        {
            $filename = public_path() . '/bower_components/polymer/custom-els/form-layout/' . Input::get('json');
            $contents = File::get($filename.'.json');
            return Response::json( json_decode( $contents ) );
        }
        catch (Illuminate\Filesystem\FileNotFoundException $error)
        {
            return Response::json( json_decode('{"error":"'. $error->getMessage() .'"}') );
        }
    }

    public function postJsonTable(){

        if( Input::has('table') && Input::has('fields') ){

            $tbl = Input::get('table');

            if( !Schema::hasTable( $tbl ) ){
                return Response::json( json_decode('{"error":"Table not found"}') );
            }

            $fields = Input::get('fields');

                foreach( $fields as $key=>$val ){
                    if (!Schema::hasColumn($tbl, $val))
                    {
                        return Response::json( json_decode('{"error":"Some of table['.$val.'] fields are incorrect"}') );
                    }
                }

            $json = Property::get( $fields )->toJSON();

                    return Response::json( $json );
        }else{
            return Response::json(json_decode('{"error":"Fileds are npt set."}'));
        }
    }

}
