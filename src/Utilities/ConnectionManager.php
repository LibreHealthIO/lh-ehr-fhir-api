<?php
namespace LibreEHR\FHIR\Utilities;

class ConnectionManager
{
    public static function connect( $model, $databaseKey )
    {
        $dataSync = AtlasBases::find($id_client);

        Config::set('database.connections.' . $nameKey, array(
            'driver'    => 'mysql',
            'host'      => $dataSync->site_db_server,
            'database'  => $dataSync->site_db_base,
            'username'  => $dataSync->site_db_user,
            'password'  => $dataSync->site_db_password,
            'charset'   => 'utf8',
            'collation' => 'utf8_general_ci',
            'prefix'    => '',
        ));

        // And set the new connection to my models

        $model->setConnection( $databaseKey );
    }
}