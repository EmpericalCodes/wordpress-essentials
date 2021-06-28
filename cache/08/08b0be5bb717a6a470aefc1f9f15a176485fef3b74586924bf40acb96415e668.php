<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/header.html.twig */
class __TwigTemplate_c37b15e6244a5e45a5d9cb348b5141a6e32ef5830da1a44bbec1b4cd2b9fad79 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"we-header\">
    <div class=\"header-left\">
        <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assets')->getCallable(), ["svg/emprial-logo.svg"]), "html", null, true);
        echo "\" alt=\"empirical image\" class=\"logo\">
    </div>
    <div class=\"header-right\">
        <div>
            <h2>Important Links</h2>
            <ul>
                <li>
                    <a href=\"#\"> Getting started </a>
                </li>
                <li>
                    <a href=\"#\"> Create a new issue </a>
                </li>
                <li>
                    <a href=\"#\"> Contribute to the project </a>
                </li>
            </ul>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"we-header\">
    <div class=\"header-left\">
        <img src=\"{{ assets('svg/emprial-logo.svg') }}\" alt=\"empirical image\" class=\"logo\">
    </div>
    <div class=\"header-right\">
        <div>
            <h2>Important Links</h2>
            <ul>
                <li>
                    <a href=\"#\"> Getting started </a>
                </li>
                <li>
                    <a href=\"#\"> Create a new issue </a>
                </li>
                <li>
                    <a href=\"#\"> Contribute to the project </a>
                </li>
            </ul>
        </div>
    </div>
</div>", "partials/header.html.twig", "D:\\wp-local\\checkout\\wp-content\\plugins\\wordpress-essentials\\templates\\partials\\header.html.twig");
    }
}
