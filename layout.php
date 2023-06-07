<style>

* {
    margin: 0;
    padding: 0;
    border: none;
}

body {
    text-align: center;
    font-family: "Fira Sans";
    font-size: 0.8em;
}

#wrapper {
    max-width: 120ch;
    margin: 0 auto;
    text-align: left;
}

body#left {
    text-align: left;
}

body#left #wrapper {
    margin: 0 2rem;
}

h1 {
    font-size: 1.5em;
    padding: 0 0.5rem;
    margin: 1rem 0 0;
}

h2 {
    font-size: 1em;
    padding: 0 0.5rem;
    margin: 1rem 0 0;
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
    margin-top: 1rem;
}

ul li {
    display: block;
    list-style-type: none;
    overflow: hidden;
    padding: 0.5em;
}

ul li .date {
    text-align: center;
    width: 20%;
}

ul li .size {
    text-align: right;
    width: 10%;
}

ul li .date, ul li .size {
    float: right;
    display: block;
}

ul#header li {
    font-size: 1em;
}

ul#header li:hover {
    background-color: transparent;
}

ul#header li .asc span, ul#header li .desc span {
    padding-right: 2rem;
}


ul li.item:first-child {
    border-top: none;
}

ul li.item .name {
}

ul li.item .directory, ul li.item .file {
    padding-left: 1.5rem;
}

#footer {
    font-size: 0.75em;
    margin-top: 2rem;
    margin-bottom: 1rem;
    padding: 0 1rem;
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
    border-radius: 1em;
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

ul#header li .asc span div {
    background-image: var(--asc);
}

ul#header li .desc span div {
    background-image: var(--desc);
}

ul li.item .directory div {
    background-image: var(--directory);
}

ul li.item .file div {
    background-image: var(--file);
}

ul#header li span {
    --asc: url('<?php echo $_self ?>?i=asc');
    --desc: url('<?php echo $_self ?>?i=desc');
}

ul li.item {
    --directory: url('<?php echo $_self ?>?i=directory');
    --file: url('<?php echo $_self ?>?i=file');
}

ul#header li span:hover {
    --asc: url('<?php echo $_self ?>?i=hasc');
    --desc: url('<?php echo $_self ?>?i=hdesc');
}

ul li.item:hover {
    --directory: url('<?php echo $_self ?>?i=hdirectory');
    --file: url('<?php echo $_self ?>?i=hfile');
}

ul#header li span {
    display: flex;
    flex-direction: row;
}

ul#header li span div {
    background-position: right center;
    background-repeat: no-repeat;
    height: 1.2em;
    width: 1.2em;
}

ul li.item div {
    background-position: right center;
    background-repeat: no-repeat;
    height: 1.2em;
    width: 1.2em;
}

ul li.item a span {
    display: flex;
    flex-direction: row;
    gap: 1ch;
}

body {
    animation: fadeInAnimation ease 1.5s;
    animation-iteration-count: 1;
    animation-fill-mode: forwards;
}
 
@keyframes fadeInAnimation {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}

#mainheader {
    margin-bottom: 2rem;
    display: flex;
    flex-direction: column;
    max-width: 120ch;
    margin-left: auto;
    margin-right: auto;
}

#toppadding {
    margin-bottom: 4rem;
}

#mainheader > img {
    object-fit: contain;
    max-width: 80ch;
    margin-left: auto;
    margin-right: auto;
}

#mainheader > h1 {
    margin-top: 2rem;
    margin-bottom: auto;
}
</style>
