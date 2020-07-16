<form action="{{url('reg_do')}}"method="post">
    @csrf
    <table>
        <tr>
            <td>用户名</td>
            <td><input type="text" name="user_name"></td>
        </tr>
        <tr>
            <td>密码</td>
            <td><input type="password" name="user_pwd"></td>
        </tr>
        <tr>
            <td>手机号码</td>
            <td><input type="text" name="user_tel"> </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="注册"> </td>
        </tr>

    </table>
</form>
