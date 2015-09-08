<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_d00232a2e7090de01edeb7da09335f1bb354fc049deb7e6e68e5b28b6e43abe3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef68f031cce855b1f8c605457d549dcc6592d99c4b547cacc92946471969d814 = $this->env->getExtension("native_profiler");
        $__internal_ef68f031cce855b1f8c605457d549dcc6592d99c4b547cacc92946471969d814->enter($__internal_ef68f031cce855b1f8c605457d549dcc6592d99c4b547cacc92946471969d814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ef68f031cce855b1f8c605457d549dcc6592d99c4b547cacc92946471969d814->leave($__internal_ef68f031cce855b1f8c605457d549dcc6592d99c4b547cacc92946471969d814_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
