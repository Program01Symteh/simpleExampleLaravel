<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class ArticleForm extends Component
{

    use WithFileUploads;

    public $title, $content, $image;

    protected $rules = [

        'title' => 'required',
        'content' => 'required',
        'image' => 'required|image'
    ];

    protected $messages = [
        'title.required' => 'Заголовок - неотъемлемая часть любой статьи',
        'content.required' => 'Статья без содержимого бессмысленна',
        'image.required' => 'Картинка для статьи очень важна, как и текст',
        'image.mimes' => 'Вы пытаетесь загрузить запрещённый формат файлов, разрешёны только: jpg, png и webp '
    ];

    public function render()
    {
        return view('livewire.article-form');
    }

    public function saveArticle(){
        $validatedData = $this->validate();
    }
}
