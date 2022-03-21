<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;
use App\Repositories\DealerRepository;
// use App\Repositories\StatusRepository;

class DealerController extends Controller
{
    public $dealerRepository;
    public $statusRepository;

    public function __construct(
        DealerRepository $dealerRepository
        // StatusRepository $statusRepository
    ) {
        $this->dealerRepository = $dealerRepository;
        // $this->statusRepository = $statusRepository;
    }

    public function index()
    {
        $dealers = $this->dealerRepository->getAll();
        return view('dealer.index', compact('dealers'));
    }

    public function create()
    {
        $status = Status::all();
        return view('dealer.create', compact('status'));
    }

    public function store(Request $request)
    {
        $this->dealerRepository->store($request);
        return redirect()->route('dealer.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $dealer = $this->dealerRepository->getById($id);
        $status = Status::all();
        return view('dealer.update', compact('dealer', 'status'));
    }

    public function update(Request $request, $id)
    {
        $this->dealerRepository->update($request, $id);
        return redirect()->route('dealer.index');
    }

    public function destroy($id)
    {
        $this->dealerRepository->deleteById($id);
        return redirect()->route('dealer.index');
    }

    public function search(Request $request)
    {
        $dealers = $this->dealerRepository->search($request);
        return view('dealer.index', compact('dealers'));
    }
}
