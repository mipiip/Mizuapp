<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>PetitVerbe</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <form action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="profile_image" accept="image/*">
    <button type="submit">アップロード</button>
</form>