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

/* index.html.twig */
class __TwigTemplate_b2eda67209cbc15123a7cdce965f65248e40976cf5fdacf576fcd8a48a811284 extends Template
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
        echo "<div class=\"we-content\">
";
        // line 2
        $this->loadTemplate("partials/header.html.twig", "index.html.twig", 2)->display($context);
        // line 3
        echo "    Body
";
        // line 4
        $this->loadTemplate("partials/footer.html.twig", "index.html.twig", 4)->display($context);
        // line 5
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.html.twig", "D:\\wp-local\\checkout\\wp-content\\plugins\\wordpress-essentials\\templates\\index.html.twig");
    }
}
