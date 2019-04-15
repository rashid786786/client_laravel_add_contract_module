<style>
    select#language {
        -webkit-appearance: button;
        -webkit-border-radius: 2px;
        -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
        -webkit-padding-end: 20px;
        -webkit-padding-start: 2px;
        -webkit-user-select: none;
        background-image: url(http://i62.tinypic.com/15xvbd5.png), -webkit-linear-gradient(#FAFAFA, #F4F4F4 40%, #E5E5E5);
        background-position: 97% center;
        background-repeat: no-repeat;
        border: 1px solid #AAA;
        color: #555;
        font-size: inherit;
        margin: 20px;
        overflow: hidden;
        padding: 1px 0px;
        text-overflow: ellipsis;
        white-space: nowrap;
        width: 100px;
    }
    .footer {
        position: fixed;
        left: 0;
        bottom: 5%;
        width: 100%;
        color: whitesmoke;
        text-align: center;
    }
</style>

<div class="navbar navbar-fixed-bottom footer">
    <select id="language" name ="language" onchange="location = this.value;">
        <option value="SetLocale/en" {{app()->getLocale() == 'en' ? 'Selected' : ''}}><strong>English</strong></option>
        <option value="SetLocale/pt-br" {{app()->getLocale() == 'pt-br' ? 'Selected' : ''}}><strong>Portuguese</strong></option>
    </select>
    <br><br>
    <p style="color:whitesmoke">Copyright © 2019 <strong style="color: white">Karlos Cabral</strong>. All rights reserved.</p>
</div>
