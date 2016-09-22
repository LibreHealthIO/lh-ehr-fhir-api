<?php

namespace LibreEHR\FHIR\Http\Controllers;

use App\Http\Requests;
use LibreEHR\Core\Contracts\BaseAdapterInterface;
use Illuminate\Http\Request;

class ValuesetController extends AbstractController
{

//    protected $valuesetAdapter = null;
    protected $providerAdapter = null;
    protected $pharmacyAdapter = null;

    public function __construct(BaseAdapterInterface $pharmacyAdapter, BaseAdapterInterface $providerAdapter)
    {
        $this->providerAdapter = $providerAdapter;
        $this->pharmacyAdapter = $pharmacyAdapter;
//        $this->middleware('auth:api');
    }

    public function index(Request $request = null)
    {
        $adapter = $this->setAdapter($request);
        return $adapter->collectionToOutput();
    }

    public function show($id)
    {
//        $this->setAdapter($request);
        return $this->valuesetAdapter->show($id);
    }

    public function post(Request $request)
    {
//        $this->setAdapter($request);
        return $this->valuesetAdapter->store($request);
    }


    public function update(Request $request)
    {
//        $this->setAdapter($request);
        return $this->valuesetAdapter->update($request);
    }

    public function destroy($id)
    {
//        $this->setAdapter($request);
        return $this->valuesetAdapter->remove($id);
    }

    private function setAdapter($request)
    {
        if ($request->header('type') == 'provider') {
            $this->valuesetAdapter = $this->providerAdapter;
        }
        if ($request->header('type')== 'pharmacy') {
            $this->valuesetAdapter = $this->pharmacyAdapter;
        }
    }
}
