<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Categoria;

class SiteController extends Controller
{	
	private $produto;
    private $categoria;
	
	public function __construct(){
        $produto = new Produto();
        $this->produto = $produto;

        $categoria = new Categoria();
        $this->categoria = $categoria;
	}

    public function index(){
        return view('index');
    }

    public function sobre(){
        return view('sobre');
    }

    public function produto(){
    	$produtos = $this->produto->paginate(4);
    	return view('gerenciar-produto', compact('produtos'));
    }

    public function categoria(){
        $categorias = $this->categoria->paginate(4);
        return view('gerenciar-categoria', compact('categorias'));
    }

    public function create(){
        //Envia as categorias para aparecer no Select, na página de Produtos
        $categorias = $this->categoria->all();
    	return view('create', compact('categorias'));
    }

    public function createCat(){
        return view('create-cat');
    }

    public function store(Request $request){
    	$dataForm = $request->all();

        //Validações de Formulário no Model
        $this->validate($request, $this->produto->rules);

        $insert = $this->produto->create($dataForm);

        if($insert){
            return redirect()->back()->with(['msg' => 'Produto criado com sucesso']);
        }else{
            return redirect()->back();
        }
    }

    public function storeCat(Request $request){
        $dataForm = $request->all();

        //Validações de Formulário
        $this->validate($request, $this->categoria->rules);

        $insert = $this->categoria->create($dataForm);

        if($insert){
            return redirect()->back()->with(['msg' => 'Categoria criada com sucesso']);
        }else{
            return redirect()->back();
        }
    }

    public function edit($id){
        //Recuperando o produto
        $pegaProduto = $this->produto->find($id);

        //Recuperando Lista do Select Categorias
        $categorias = $this->categoria->all();
        $id = $id;


        return view('edit', compact('pegaProduto', 'id', 'categorias'));
    }

    public function editCat($id){
        //Recuperando o produto
        $pegaCategoria = $this->categoria->find($id);
        $id = $id;

        return view('edit-cat', compact('pegaCategoria', 'id'));
    }


    public function update(Request $request){
        $dataForm = $request->all();
        $id = $dataForm['id'];

        $produto = $this->produto->find($id);
        $update = $produto->update($dataForm);

        if($update){
            return redirect()->back()->with(['msg' => 'Atualizado com sucesso']);
        }else{
            return redirect()->back();
        }
    }

    public function updateCat(Request $request){
        $dataForm = $request->all();
        $id = $dataForm['id'];

        $categoria = $this->categoria->find($id);
        $update = $categoria->update($dataForm);

        if($update){
             return redirect()->back()->with(['msg' => 'Atualizado com sucesso']);   
        }else{
            return redirect()->back();
        }
    }

    public function delete($id){
        $produto = $this->produto->find($id);
        $delete = $produto->delete();

        if($delete){
            return redirect()->back();
        }else{
            return redirect()->back();
        }
    }

    public function deleteCat($id){
        $categoria = $this->categoria->find($id);
        $delete = $categoria->delete();

        if($delete){
            return redirect()->back();
        }else{
            return redirect()->back();
        }
    }
}
