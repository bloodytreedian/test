<div>
    <form action={{route('verify-user')}} method="post">
        {{ csrf_field() }}
        User name: <input class="name" name="name">
        <br />
        Password:  <input class="password" name="password" type="password">
        <br />
        <button>Submit</button>
        <a type="button" href="/register">Register</a>
    </form>
</div>