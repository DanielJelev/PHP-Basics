<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        form {
            width: 650px;
        }
    </style>
    <script type ="text/javascript">
        var i = 1;
        var j = 1;
        function addLanguage() {
            var div = document.createElement('div');
            div.innerHTML = "<input type='text' name='lang' required='required'/>" +
            "<select name='comprehension[]'>" +
            "<option disabled='disabled' selected='selected'>Comprehension</option>" +
            "<option value='beginner'>Beginner</option>" +
            "<option value='intermediate'>intermediate</option>" +
            "<option value='advanced'>advanced</option>" +
            "</select>" +
            "<select name='reading[]'>" +
            "<option disabled='disabled' selected='selected'>Reading</option>" +
            "<option value='beginner'>Beginner</option>" +
            "<option value='intermediate'>intermediate</option>" +
            "<option value='advanced'>advanced</option>" +
            "</select>" +
            "<select name='writing[]'>" +
            "<option disabled='disabled' selected='selected'>Writing</option>" +
            "<option value='beginner'>Beginner</option>" +
            "<option value='intermediate'>intermediate</option>" +
            "<option value='advanced'>advanced</option>" +
            "</select>";
            document.getElementById('language').appendChild(div);
        }
        function addPLanguage() {
            var div = document.createElement('div');
            div.innerHTML = "<input type='text' required='required' id='plang' name='plang'/>" +
            "<select name='level' id='level'> " +
            "<option value='Beginner' selected='selected'>Beginner</option>" +
            "<option value='Programmer' selected='selected'>Programmer</option>" +
            "<option value='Ninja' selected='selected'>Ninja</option>" +
            "</select><br/>";
            document.getElementById('programmingLang').appendChild(div);

        }
        function removeLanguage(id) {
            var div = document.getElementById(id);
            div.removeChild(div.childNodes[div.childNodes.length -1]);
        }
    </script>
</head>
<body>
<form method="POST" action="CV.php">
    <fieldset>
        <legend>Personal Information</legend>
        <input type="text" required="required" placeholder="First Name" id="fName" name="fName"/><br/>
        <input type="text" required="required" placeholder="Last Name" id="lName" name="lName"/><br/>
        <input type="text" required="required" placeholder="Email" id="email" name="email"/><br/>
        <input type="text" required="required" placeholder="Phone Number" id="phone" name="phone"/><br/>
        <label for="female">Female</label>
        <input type="radio" required="required" name="gender" id="female" value="Female"/>
        <label for="male">Male</label>
        <input type="radio" required="required" name="gender" id="male" value="Male"/><br/>
        <label for="bdate">Birth Date</label><br/>
        <input type="date" id="bdate" name="bdate" required="required" /><br/>
        <label for="nationality">Nationality</label><br/>
        <select name="nationality" id="nationality">
            <option value="Bulgarian" selected="selected">Bulgarian</option>
            <option value="German">German</option>
            <option value="English">English</option>
        </select>
    </fieldset>
    <fieldset>
        <legend>Last Week Position</legend>
        <label for="company">Company Name</label>
        <input type="text" required="required" id="company" name="company"/><br/>
        <label for="from">From</label>
        <input type="date" required="required" id="from" name="from"/><br/>
        <label for="to">To</label>
        <input type="date" required="required" id="to" name="to"/>
    </fieldset>
    <fieldset>
        <legend>Computer Skills</legend>

        <label for="plang">Programming Languages</label><br/>
        <div id="programmingLang">
            <input type="text" required="required" id="pLang" name="pLang[]"/>
            <select name="level[]" id="level">
                <option value="Beginner" selected="selected">Beginner</option>
                <option value="Programmer" selected="selected">Programmer</option>
                <option value="Ninja" selected="selected">Ninja</option>
            </select><br/>
        </div>
        <input type="button" value="Remove Language" onclick="removeLanguage()" id="remProgLang" />
        <input type="button" value="Add Language" onclick="addPLanguage()" />
    </fieldset>
    <fieldset>
        <legend>Other Skills</legend>
        <label for="lang">Languages</label>
        <div id="language">
            <input type="text" name="lang[]" required="required"/>
            <select name="comprehension[]">
                <option disabled="disabled" selected="selected">Comprehension</option>
                <option value="beginner">Beginner</option>
                <option value="intermediate">intermediate</option>
                <option value="advanced">advanced</option>
            </select>
            <select name="reading[]">
                <option disabled="disabled" selected="selected">Reading</option>
                <option value="beginner">Beginner</option>
                <option value="intermediate">intermediate</option>
                <option value="advanced">advanced</option>
            </select>
            <select name="writing[]">
                <option disabled="disabled" selected="selected">Writing</option>
                <option value="beginner">Beginner</option>
                <option value="intermediate">intermediate</option>
                <option value="advanced">advanced</option>
            </select>
        </div>
        <input type="button" value="Remove Language" onclick="removeLanguage()" id="remLang" />
        <input type="button" value="Add Language" onclick="addLanguage()" /><br/>
        <label for="driverLicense">Driver`s License</label><br/>
        <label for="b">B</label>
        <input type="checkbox" name="b" value="B" id="b" />
        <label for="a">A</label>
        <input type="checkbox" name="a" value="A" id="a" />
        <label for="c">C</label>
        <input type="checkbox" name="c" value="C" id="c" />
    </fieldset>
    <input type="submit" required="required" value="Generate CV"/>
</form>
</body>
</html>