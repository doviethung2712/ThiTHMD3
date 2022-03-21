<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\DealerRepository;
use App\Repositories\StatusRepository;

class DealerController extends Controller
{
    public $dealerRepository;
    // public $statusRepository;

    public function __construct(DealerRepository $dealerRepository
                                // StatusRepository $statusRepository
                                )
    {
            $this->dealerRepository = $dealerRepository;
            // $this->statusRepository = $statusRepository;
    }

    public function index()
    {
        $dealers = $this->dealerRepository->getAll();
        // dd($dealer);
        return view('dealer.index',compact('dealers'));
    }

    public function create()
    {
        // $status = $this->statusRepository->getAll();
        // dd($status);
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
