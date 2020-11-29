<h1>form</h1>
<style>
    .field_error{color: red;}
</style>
<form method="post" action="formSubmit" enctype="multipart/form-data">
    {{@csrf_field()}}
    <table>
        <tr>
            <td>Name</td>
            <td>
                <input type="textbox" name="name"/>
                <span class="field_error">
                    @error('name')
                        {{$message}}
                    @enderror
                </span>
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>
                <input type="textbox" name="email"/>
                <span class="field_error">
                    @error('email')
                        {{$message}}
                    @enderror
                </span>
            </td>
        </tr>
        <tr>
            <td>File</td>
            <td>
                <input type="file" name="doc"/>
                <span class="field_error">
                    @error('doc')
                        {{$message}}
                    @enderror
                </span>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="submit"/>
            </td>
        </tr>
    </table>
{{--    {{@csrf_field()}}--}}
{{--    <input type="textbox" name="name"/>--}}
{{--    <input type="submit" name="submit"/>--}}
</form>
