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

/* core/themes/bartik/templates/classy/user/forum-submitted.html.twig */
class __TwigTemplate_2e0f72dc7f4d598a6d1ea14812dd2a048275ed6c1dc82b58f48fddb5194091f3 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        if (($context["time"] ?? null)) {
            // line 18
            echo "  <span class=\"submitted\">";
            echo t("By @author @time ago", array("@author" => ($context["author"] ?? null), "@time" => ($context["time"] ?? null), ));
            echo "</span>
";
        } else {
            // line 20
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("n/a"));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/classy/user/forum-submitted.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 20,  41 => 18,  39 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/bartik/templates/classy/user/forum-submitted.html.twig", "C:\\xampp\\htdocs\\drupal-sites\\forum\\core\\themes\\bartik\\templates\\classy\\user\\forum-submitted.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 17, "trans" => 18);
        static $filters = array("escape" => 18, "t" => 20);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
