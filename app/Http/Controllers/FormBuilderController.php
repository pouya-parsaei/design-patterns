<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Src\AbstractFactory\FormBuilder\FormUIFactory;

class FormBuilderController extends Controller
{
    public function __construct(private FormUIFactory $formUIBuilder)
    {

    }

    public function output(Request $request)
    {
        $button = $this->formUIBuilder->createButton();

        $textInput = $this->formUIBuilder->createTextInput();

        $textArea = $this->formUIBuilder->createTextArea();

        return view('form', compact('button', 'textInput', 'textArea'));
    }
}
