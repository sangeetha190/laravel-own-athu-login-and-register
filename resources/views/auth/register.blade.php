<form action="store" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name" />
    <input type="text" name="email" placeholder="Email" />
    <input type="password" name="password" placeholder="Password" />
    <input type="password" name="password_confirmation" placeholder="Confirm Password " />
    <input type="submit" name="Register" />
</form>

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all(`<li>:message</li>`)) }}
    </ul>
@endif
