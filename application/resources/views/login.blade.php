<h1>Login Page</h1>
<style>
    .field_error{color: red;}
</style>
<form method="post" action="userLoginSubmit">
    {{@csrf_field()}}
    <table>
        <tr>
            <td>Email</td>
            <td>
                <input type="email" name="email"/>
                <span class="field_error">
                    @error('email')
                        {{$message}}
                    @enderror
                </span>
            </td>
        </tr>
        <tr>
            <td>Password</td>
            <td>
                <input type="password" name="password"/>
                <span class="field_error">
                    @error('password')
                    {{$message}}
                    @enderror
                </span>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="submit"/>
                <span class="field_error">
                    {{session('error')}}
                </span>
            </td>
        </tr>
    </table>
</form>
