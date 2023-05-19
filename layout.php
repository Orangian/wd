<style>

* {
    margin: 0;
    padding: 0;
    border: none;
}

body {
    text-align: center;
    font-family: "Fira Sans";
    font-size: 1.5ch;
}

#wrapper {
    max-width: 120ch;
    *width: 600px;
    margin: 0 auto;
    text-align: left;
}

body#left {
    text-align: left;
}

body#left #wrapper {
    margin: 0 20px;
}

h1 {
    font-size: 21px;
    padding: 0 10px;
    margin: 20px 0 0;
    font-weight: bold;
}

h2 {
    font-size: 14px;
    padding: 0 10px;
    margin: 10px 0 0;
    font-weight: normal;
}

a {
    text-decoration: none;
    width:  fit-content;
    display: inline-block;

}

a:hover {
    text-decoration: none;
}

ul#header {	
    margin-top: 20px;
}

ul li {
    display: block;
    list-style-type: none;
    overflow: hidden;
    padding: 10px;
}

ul li .date {
    text-align: center;
    width: 120px;
}

ul li .size {
    text-align: right;
    width: 90px;
}

ul li .date, ul li .size {
    float: right;
    font-size: 12px;
    display: block;
}

ul#header li {
    font-size: 11px;
    font-weight: bold;
}

ul#header li:hover {
    background-color: transparent;
}

ul#header li * {
    font-size: 11px;
}

ul#header li .asc span, ul#header li .desc span {
    padding-right: 15px;
}


ul li.item:first-child {
    border-top: none;
}

ul li.item .name {
    font-weight: bold;
}

ul li.item .directory, ul li.item .file {
    padding-left: 20px;
}

#footer {
    font-size: ;
    margin-top: 40px;
    margin-bottom: 20px;
    padding: 0 10px;
    text-align: left;
}

#footer a {
    font-weight: bold;
}

a::after {
    text-decoration: none;
    width: 0;
    content: "";
    position: relative;
    height: .2em;
    display: block;
    transition-property: width;
    bottom: 0;
    transition: 0.5s cubic-bezier(0.42, 0.0, 0.0, 1);
    border-radius: 1vw;
}

a:hover::after,  a:focus::after {
    width: 100%;
}

a:hover,  a:focus {
    transition: color .5s ease;
}

span {
    width: fit-content;
}

</style>