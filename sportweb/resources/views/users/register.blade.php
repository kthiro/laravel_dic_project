@extends('layouts.application')

@section('title', 'Sportweb 新規会員登録')

@section('additional_js')
    <script src="/js/users.js"></script>
@endsection

@section('content') <!-- TODO: インデント要整頓 -->

    @component('components.content_header')
        @slot('content_title', '新規会員登録')
    @endcomponent
        
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <form method="POST" action="./confirm">
                    <table class="table table-hover">
                        <tbody>
                            @each('collections.generate_form_using_table', $form_elements, 'form_element')
                        </tbody>
                    </table>
                    <hr class="my-4">
                    <div class="text-center">
                        <input type="submit" value="登録内容を確認する", class="btn btn-outline-info" >
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection
