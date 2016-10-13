<?php

namespace LibreEHR\FHIR\Http\Controllers;

use App\Http\Requests;
use LibreEHR\Core\Contracts\BaseAdapterInterface;
use Illuminate\Http\Request;

class ValuesetController extends AbstractController
{
    protected $valueSetAdapter = null;

    public function __construct(BaseAdapterInterface $valueSetAdapter)
    {
        $this->valueSetAdapter = $valueSetAdapter;
//        $this->middleware('auth:api');
    }

    public function index(Request $request = null)
    {
        return $this->valueSetAdapter->collectionToOutput();
    }

    public function show($id)
    {
        return $this->valueSetAdapter->retrieve($id);
    }
}
