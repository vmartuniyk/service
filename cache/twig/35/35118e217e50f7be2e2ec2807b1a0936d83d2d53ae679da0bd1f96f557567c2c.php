<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/footer.html.twig */
class __TwigTemplate_6c4f702631ca9e72ce3f0725bd90b6149d155ced44fb1c8bf9a1ad9adb053b69 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<footer class=\"footer_go\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"logo_block_go wow fadeIn\" data-wow-delay=\".1s\">
\t\t\t\t<img src=\"images/logo_footer.svg\" alt=\"\" width=\"580\">
\t\t\t</div>
\t\t\t<div class=\"developement_gr_g\">
\t\t\t\t<div class=\"line_dev_g wow fadeInUp\" data-wow-delay=\".3s\"></div>
\t\t\t\t<p class=\"wow fadeInUp\" data-wow-delay=\".4s\">web Development</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"adresses_go flex_go flex_between\">
\t\t\t\t<div class=\"item_adres_gr_g flex_go wow fadeInUp\" data-wow-delay=\".3s\">
\t\t\t\t\t<div class=\"icon_adres_g map_icon\"></div>
\t\t\t\t\t<div>Location <strong>3600 Las Vegas NV 89907 </strong></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"item_adres_gr_g flex_go wow fadeInUp\" data-wow-delay=\".5s\">
\t\t\t\t\t<div class=\"icon_adres_g icon_phone\"></div>
\t\t\t\t\t<div>General info <strong><a href=\"tel:1300068756\">1 3000 687 56</a></strong></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"item_adres_gr_g flex_go wow fadeInUp\" data-wow-delay=\".7s\">
\t\t\t\t\t<div class=\"icon_adres_g icon_envelope\"></div>
\t\t\t\t\t<div>Email address <strong><a href=\"mailto:itc_service@gmail.com\">itc_service@gmail.com</a></strong></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"footer_socials\">
\t\t\t\t<div class=\"soc_go\">
\t\t\t\t\t<nav class=\"flex_go\">
\t\t\t\t\t\t<a href=\"#\" target=\"_blank\" class=\"wow fadeInRight\" data-wow-delay=\".1s\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" x=\"0px\" y=\"0px\" width=\"430.123px\" height=\"430.123px\" viewBox=\"0 0 430.123 430.123\" style=\"enable-background:new 0 0 430.123 430.123;\" xml:space=\"preserve\"> <g> <path id=\"Behance\" d=\"M388.432,119.12H280.659V92.35h107.782v26.77H388.432z M208.912,228.895 c6.954,10.771,10.429,23.849,10.429,39.203c0,15.878-3.918,30.122-11.889,42.704c-5.071,8.326-11.367,15.359-18.932,21.021 c-8.52,6.548-18.607,11.038-30.203,13.437c-11.633,2.403-24.224,3.617-37.787,3.617H0V81.247h129.25 c32.579,0.53,55.676,9.969,69.315,28.506c8.184,11.369,12.239,25.011,12.239,40.868c0,16.362-4.104,29.454-12.368,39.401 c-4.597,5.577-11.388,10.65-20.378,15.229C191.675,210.236,202.007,218.086,208.912,228.895z M61.722,186.76h56.632 c11.638,0,21.046-2.212,28.292-6.634c7.241-4.415,10.854-12.263,10.854-23.531c0-12.449-4.784-20.712-14.375-24.689 c-8.244-2.763-18.792-4.186-31.591-4.186H61.722V186.76z M162.953,264.275c0-13.902-5.682-23.513-17.023-28.67 c-6.342-2.931-15.29-4.429-26.763-4.536H61.722v71.322h56.556c11.619,0,20.612-1.521,27.102-4.694 C157.084,291.863,162.953,280.76,162.953,264.275z M428.419,220.736c1.302,8.756,1.891,21.46,1.652,38.065H290.493 c0.77,19.266,7.421,32.739,20.035,40.449c7.607,4.835,16.83,7.196,27.63,7.196c11.388,0,20.67-2.879,27.815-8.797 c3.893-3.137,7.327-7.565,10.296-13.152h51.16c-1.34,11.379-7.5,22.92-18.57,34.648c-17.151,18.641-41.205,27.988-72.097,27.988 c-25.52,0-48.011-7.883-67.533-23.592C249.772,307.777,240,282.211,240,246.746c0-33.257,8.773-58.712,26.378-76.43 c17.67-17.751,40.474-26.586,68.583-26.586c16.661,0,31.68,2.978,45.079,8.965c13.357,5.993,24.396,15.425,33.09,28.388 C420.998,192.499,426.058,205.699,428.419,220.736z M378.062,225.73c-0.938-13.322-5.386-23.405-13.395-30.296 c-7.943-6.91-17.866-10.379-29.706-10.379c-12.886,0-22.836,3.708-29.906,10.996c-7.118,7.273-11.547,17.161-13.362,29.68H378.062 L378.062,225.73z\"/> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" target=\"_blank\" class=\"wow fadeInRight\" data-wow-delay=\".2s\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" x=\"0px\" y=\"0px\" width=\"604.35px\" height=\"604.35px\" viewBox=\"0 0 604.35 604.35\" style=\"enable-background:new 0 0 604.35 604.35;\" xml:space=\"preserve\"> <g> <g id=\"google-plus\"> <path d=\"M516.375,255v-76.5h-51V255h-76.5v51h76.5v76.5h51V306h76.5v-51H516.375z M320.025,341.7l-28.051-20.4 c-10.2-7.649-20.399-17.85-20.399-35.7s12.75-33.15,25.5-40.8c33.15-25.5,66.3-53.55,66.3-109.65c0-53.55-33.15-84.15-51-99.45 h43.35l30.6-35.7h-158.1c-112.2,0-168.3,71.4-168.3,147.9c0,58.65,45.9,122.4,127.5,122.4h20.4c-2.55,7.65-10.2,20.4-10.2,33.15 c0,25.5,10.2,35.7,22.95,51c-35.7,2.55-102,10.2-150.45,40.8c-45.9,28.05-58.65,66.3-58.65,94.35 c0,58.65,53.55,114.75,168.3,114.75c137.7,0,204.001-76.5,204.001-150.449C383.775,400.35,355.725,372.3,320.025,341.7z M126.225,109.65c0-56.1,33.15-81.6,68.85-81.6c66.3,0,102,89.25,102,140.25c0,66.3-53.55,79.05-73.95,79.05 C159.375,247.35,126.225,168.3,126.225,109.65z M218.024,568.65c-84.15,0-137.7-38.25-137.7-94.351c0-56.1,51-73.95,66.3-81.6 c33.15-10.2,76.5-12.75,84.15-12.75s12.75,0,17.85,0c61.2,43.35,86.7,61.2,86.7,102C335.324,530.4,286.875,568.65,218.024,568.65z \"/> </g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" target=\"_blank\" class=\"wow fadeInRight\" data-wow-delay=\".3s\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" x=\"0px\" y=\"0px\" width=\"96.124px\" height=\"96.123px\" viewBox=\"0 0 96.124 96.123\" style=\"enable-background:new 0 0 96.124 96.123;\" xml:space=\"preserve\"> <g> <path d=\"M72.089,0.02L59.624,0C45.62,0,36.57,9.285,36.57,23.656v10.907H24.037c-1.083,0-1.96,0.878-1.96,1.961v15.803 c0,1.083,0.878,1.96,1.96,1.96h12.533v39.876c0,1.083,0.877,1.96,1.96,1.96h16.352c1.083,0,1.96-0.878,1.96-1.96V54.287h14.654 c1.083,0,1.96-0.877,1.96-1.96l0.006-15.803c0-0.52-0.207-1.018-0.574-1.386c-0.367-0.368-0.867-0.575-1.387-0.575H56.842v-9.246 c0-4.444,1.059-6.7,6.848-6.7l8.397-0.003c1.082,0,1.959-0.878,1.959-1.96V1.98C74.046,0.899,73.17,0.022,72.089,0.02z\"/> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" target=\"_blank\" class=\"wow fadeInRight\" data-wow-delay=\".4s\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" x=\"0px\" y=\"0px\" width=\"97.395px\" height=\"97.395px\" viewBox=\"0 0 97.395 97.395\" style=\"enable-background:new 0 0 97.395 97.395;\" xml:space=\"preserve\"> <g> <path d=\"M12.501,0h72.393c6.875,0,12.5,5.09,12.5,12.5v72.395c0,7.41-5.625,12.5-12.5,12.5H12.501C5.624,97.395,0,92.305,0,84.895 V12.5C0,5.09,5.624,0,12.501,0L12.501,0z M70.948,10.821c-2.412,0-4.383,1.972-4.383,4.385v10.495c0,2.412,1.971,4.385,4.383,4.385 h11.008c2.412,0,4.385-1.973,4.385-4.385V15.206c0-2.413-1.973-4.385-4.385-4.385H70.948L70.948,10.821z M86.387,41.188h-8.572 c0.811,2.648,1.25,5.453,1.25,8.355c0,16.2-13.556,29.332-30.275,29.332c-16.718,0-30.272-13.132-30.272-29.332 c0-2.904,0.438-5.708,1.25-8.355h-8.945v41.141c0,2.129,1.742,3.872,3.872,3.872h67.822c2.13,0,3.872-1.742,3.872-3.872V41.188 H86.387z M48.789,29.533c-10.802,0-19.56,8.485-19.56,18.953c0,10.468,8.758,18.953,19.56,18.953 c10.803,0,19.562-8.485,19.562-18.953C68.351,38.018,59.593,29.533,48.789,29.533z\"/> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg>
\t\t\t\t\t\t</a>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"copyright\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row wow fadeIn\" data-wow-delay=\".3s\">
\t\t\t\tCopyright © 2013-2019 itc_service. All rights reserved
\t\t\t</div>
\t\t</div>
\t</div>
</footer>";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer_go\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"logo_block_go wow fadeIn\" data-wow-delay=\".1s\">
\t\t\t\t<img src=\"images/logo_footer.svg\" alt=\"\" width=\"580\">
\t\t\t</div>
\t\t\t<div class=\"developement_gr_g\">
\t\t\t\t<div class=\"line_dev_g wow fadeInUp\" data-wow-delay=\".3s\"></div>
\t\t\t\t<p class=\"wow fadeInUp\" data-wow-delay=\".4s\">web Development</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"adresses_go flex_go flex_between\">
\t\t\t\t<div class=\"item_adres_gr_g flex_go wow fadeInUp\" data-wow-delay=\".3s\">
\t\t\t\t\t<div class=\"icon_adres_g map_icon\"></div>
\t\t\t\t\t<div>Location <strong>3600 Las Vegas NV 89907 </strong></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"item_adres_gr_g flex_go wow fadeInUp\" data-wow-delay=\".5s\">
\t\t\t\t\t<div class=\"icon_adres_g icon_phone\"></div>
\t\t\t\t\t<div>General info <strong><a href=\"tel:1300068756\">1 3000 687 56</a></strong></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"item_adres_gr_g flex_go wow fadeInUp\" data-wow-delay=\".7s\">
\t\t\t\t\t<div class=\"icon_adres_g icon_envelope\"></div>
\t\t\t\t\t<div>Email address <strong><a href=\"mailto:itc_service@gmail.com\">itc_service@gmail.com</a></strong></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"footer_socials\">
\t\t\t\t<div class=\"soc_go\">
\t\t\t\t\t<nav class=\"flex_go\">
\t\t\t\t\t\t<a href=\"#\" target=\"_blank\" class=\"wow fadeInRight\" data-wow-delay=\".1s\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" x=\"0px\" y=\"0px\" width=\"430.123px\" height=\"430.123px\" viewBox=\"0 0 430.123 430.123\" style=\"enable-background:new 0 0 430.123 430.123;\" xml:space=\"preserve\"> <g> <path id=\"Behance\" d=\"M388.432,119.12H280.659V92.35h107.782v26.77H388.432z M208.912,228.895 c6.954,10.771,10.429,23.849,10.429,39.203c0,15.878-3.918,30.122-11.889,42.704c-5.071,8.326-11.367,15.359-18.932,21.021 c-8.52,6.548-18.607,11.038-30.203,13.437c-11.633,2.403-24.224,3.617-37.787,3.617H0V81.247h129.25 c32.579,0.53,55.676,9.969,69.315,28.506c8.184,11.369,12.239,25.011,12.239,40.868c0,16.362-4.104,29.454-12.368,39.401 c-4.597,5.577-11.388,10.65-20.378,15.229C191.675,210.236,202.007,218.086,208.912,228.895z M61.722,186.76h56.632 c11.638,0,21.046-2.212,28.292-6.634c7.241-4.415,10.854-12.263,10.854-23.531c0-12.449-4.784-20.712-14.375-24.689 c-8.244-2.763-18.792-4.186-31.591-4.186H61.722V186.76z M162.953,264.275c0-13.902-5.682-23.513-17.023-28.67 c-6.342-2.931-15.29-4.429-26.763-4.536H61.722v71.322h56.556c11.619,0,20.612-1.521,27.102-4.694 C157.084,291.863,162.953,280.76,162.953,264.275z M428.419,220.736c1.302,8.756,1.891,21.46,1.652,38.065H290.493 c0.77,19.266,7.421,32.739,20.035,40.449c7.607,4.835,16.83,7.196,27.63,7.196c11.388,0,20.67-2.879,27.815-8.797 c3.893-3.137,7.327-7.565,10.296-13.152h51.16c-1.34,11.379-7.5,22.92-18.57,34.648c-17.151,18.641-41.205,27.988-72.097,27.988 c-25.52,0-48.011-7.883-67.533-23.592C249.772,307.777,240,282.211,240,246.746c0-33.257,8.773-58.712,26.378-76.43 c17.67-17.751,40.474-26.586,68.583-26.586c16.661,0,31.68,2.978,45.079,8.965c13.357,5.993,24.396,15.425,33.09,28.388 C420.998,192.499,426.058,205.699,428.419,220.736z M378.062,225.73c-0.938-13.322-5.386-23.405-13.395-30.296 c-7.943-6.91-17.866-10.379-29.706-10.379c-12.886,0-22.836,3.708-29.906,10.996c-7.118,7.273-11.547,17.161-13.362,29.68H378.062 L378.062,225.73z\"/> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" target=\"_blank\" class=\"wow fadeInRight\" data-wow-delay=\".2s\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" x=\"0px\" y=\"0px\" width=\"604.35px\" height=\"604.35px\" viewBox=\"0 0 604.35 604.35\" style=\"enable-background:new 0 0 604.35 604.35;\" xml:space=\"preserve\"> <g> <g id=\"google-plus\"> <path d=\"M516.375,255v-76.5h-51V255h-76.5v51h76.5v76.5h51V306h76.5v-51H516.375z M320.025,341.7l-28.051-20.4 c-10.2-7.649-20.399-17.85-20.399-35.7s12.75-33.15,25.5-40.8c33.15-25.5,66.3-53.55,66.3-109.65c0-53.55-33.15-84.15-51-99.45 h43.35l30.6-35.7h-158.1c-112.2,0-168.3,71.4-168.3,147.9c0,58.65,45.9,122.4,127.5,122.4h20.4c-2.55,7.65-10.2,20.4-10.2,33.15 c0,25.5,10.2,35.7,22.95,51c-35.7,2.55-102,10.2-150.45,40.8c-45.9,28.05-58.65,66.3-58.65,94.35 c0,58.65,53.55,114.75,168.3,114.75c137.7,0,204.001-76.5,204.001-150.449C383.775,400.35,355.725,372.3,320.025,341.7z M126.225,109.65c0-56.1,33.15-81.6,68.85-81.6c66.3,0,102,89.25,102,140.25c0,66.3-53.55,79.05-73.95,79.05 C159.375,247.35,126.225,168.3,126.225,109.65z M218.024,568.65c-84.15,0-137.7-38.25-137.7-94.351c0-56.1,51-73.95,66.3-81.6 c33.15-10.2,76.5-12.75,84.15-12.75s12.75,0,17.85,0c61.2,43.35,86.7,61.2,86.7,102C335.324,530.4,286.875,568.65,218.024,568.65z \"/> </g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" target=\"_blank\" class=\"wow fadeInRight\" data-wow-delay=\".3s\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" x=\"0px\" y=\"0px\" width=\"96.124px\" height=\"96.123px\" viewBox=\"0 0 96.124 96.123\" style=\"enable-background:new 0 0 96.124 96.123;\" xml:space=\"preserve\"> <g> <path d=\"M72.089,0.02L59.624,0C45.62,0,36.57,9.285,36.57,23.656v10.907H24.037c-1.083,0-1.96,0.878-1.96,1.961v15.803 c0,1.083,0.878,1.96,1.96,1.96h12.533v39.876c0,1.083,0.877,1.96,1.96,1.96h16.352c1.083,0,1.96-0.878,1.96-1.96V54.287h14.654 c1.083,0,1.96-0.877,1.96-1.96l0.006-15.803c0-0.52-0.207-1.018-0.574-1.386c-0.367-0.368-0.867-0.575-1.387-0.575H56.842v-9.246 c0-4.444,1.059-6.7,6.848-6.7l8.397-0.003c1.082,0,1.959-0.878,1.959-1.96V1.98C74.046,0.899,73.17,0.022,72.089,0.02z\"/> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" target=\"_blank\" class=\"wow fadeInRight\" data-wow-delay=\".4s\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" x=\"0px\" y=\"0px\" width=\"97.395px\" height=\"97.395px\" viewBox=\"0 0 97.395 97.395\" style=\"enable-background:new 0 0 97.395 97.395;\" xml:space=\"preserve\"> <g> <path d=\"M12.501,0h72.393c6.875,0,12.5,5.09,12.5,12.5v72.395c0,7.41-5.625,12.5-12.5,12.5H12.501C5.624,97.395,0,92.305,0,84.895 V12.5C0,5.09,5.624,0,12.501,0L12.501,0z M70.948,10.821c-2.412,0-4.383,1.972-4.383,4.385v10.495c0,2.412,1.971,4.385,4.383,4.385 h11.008c2.412,0,4.385-1.973,4.385-4.385V15.206c0-2.413-1.973-4.385-4.385-4.385H70.948L70.948,10.821z M86.387,41.188h-8.572 c0.811,2.648,1.25,5.453,1.25,8.355c0,16.2-13.556,29.332-30.275,29.332c-16.718,0-30.272-13.132-30.272-29.332 c0-2.904,0.438-5.708,1.25-8.355h-8.945v41.141c0,2.129,1.742,3.872,3.872,3.872h67.822c2.13,0,3.872-1.742,3.872-3.872V41.188 H86.387z M48.789,29.533c-10.802,0-19.56,8.485-19.56,18.953c0,10.468,8.758,18.953,19.56,18.953 c10.803,0,19.562-8.485,19.562-18.953C68.351,38.018,59.593,29.533,48.789,29.533z\"/> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg>
\t\t\t\t\t\t</a>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"copyright\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row wow fadeIn\" data-wow-delay=\".3s\">
\t\t\t\tCopyright © 2013-2019 itc_service. All rights reserved
\t\t\t</div>
\t\t</div>
\t</div>
</footer>", "partials/footer.html.twig", "E:\\OSPanel\\domains\\grav-admin.loc\\user\\themes\\mytheme\\templates\\partials\\footer.html.twig");
    }
}
