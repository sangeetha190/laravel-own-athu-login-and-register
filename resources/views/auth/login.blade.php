<form action="/authenticate" method="POST">
    @csrf
    <input type="text" name="email" />
    <input type="password" name="password" />
    <input type="submit" value="Login" />
</form>

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all(`<li>:message</li>`)) }}
    </ul>
@endif
