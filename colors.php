<style>

:root {
    --base03:    #002b36;
    --base02:    #073642;
    --base01:    #586e75;
    --base00:    #657b83;
    --base0:     #839496;
    --base1:     #93a1a1;
    --base2:     #eee8d5;
    --base3:     #fdf6e3;
    --yellow:    #b58900;
    --orange:    #cb4b16;
    --red:       #dc322f;
    --magenta:   #d33682;
    --violet:    #6c71c4;
    --blue:      #268bd2;
    --cyan:      #2aa198;
    --green:     #859900;
    color-scheme: light dark;
}

ul#header li .asc span div {
    background-image: url('<?php echo $_self ?>?i=asc');
    background-position: right center;
    background-repeat: no-repeat;
    height: 1vw;
    width: 1vw;
}

ul#header li .desc span div {
    background-image: url('<?php echo $_self ?>?i=desc');
    background-position: right center;
    background-repeat: no-repeat;
}

ul li.item .directory div {
    background-image: url('<?php echo $_self ?>?i=directory');
    background-position: right center;
    background-repeat: no-repeat;
}

ul li.item .file div {
    background-image: url('<?php echo $_self ?>?i=file');
    background-position: right center;
    background-repeat: no-repeat;
}

@media (prefers-color-scheme: dark) {
    :root {
        --bg-3: var(--base03);
        --bg-2: var(--base02);
        --txt-0: var(--base0);
        --txt-1: var(--base1);
    }
}

@media (prefers-color-scheme: light) {
    :root {
        --bg-3: var(--base3);
        --bg-2: var(--base2);
        --txt-0: var(--base00);
        --txt-1: var(--base01);
    }
}

body {
    background-color: var(--bg-3);
    color: var(--txt-1);
}

#wrapper {
    background-color: var(--bg-3);
}

h2 {
    color: var(--txt-1);
}

a {
    color: var(--blue);
}

a:hover {
    color: var(--cyan);
}

ul li:hover {
    background-color: var(--bg-2);
}

ul#header li {
    border-bottom: 1px solid var(--yellow);
}

ul#header li * {
    color:
}

ul#header li a:hover {
    color: 
}

ul li.item {
    border-top: 1px solid var(--yellow);
}

#footer {
    color: var(--txt-1);
}

#footer a { 
    color: 
}

#footer a:hover {
    color: 
}

a:hover,  a:focus {
    color: 
}

a::after {
    background-color: var(--yellow);
}

</style>