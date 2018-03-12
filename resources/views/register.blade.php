<div>
    <h1>Register your account</h1>
    <form action="/save_user" method="post">
        {{ csrf_field() }}
        User name: <input class="name" name="name">
        <br />
        Password:  <input class="password" name="password" type="password">
        <br />
        Email:  <input class="email" name="email" type="text">
        <br />
        <button>Submit</button>
    </form>
</div>