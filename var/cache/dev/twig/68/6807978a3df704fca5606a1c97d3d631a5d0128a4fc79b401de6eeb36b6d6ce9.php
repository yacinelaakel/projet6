<?php

/* PortailWebBundle:Default:index.html.twig */
class __TwigTemplate_9ed90f7682db1619f2dcada51beaded074b52bc4d22c1ba3ce7e38d0121b7cc0 extends Twig_Template
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
        $__internal_04ae9dcfdcfb903aa7981c8b72ac4102ee0029b2df75791f981a5f4a4a3594b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04ae9dcfdcfb903aa7981c8b72ac4102ee0029b2df75791f981a5f4a4a3594b9->enter($__internal_04ae9dcfdcfb903aa7981c8b72ac4102ee0029b2df75791f981a5f4a4a3594b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PortailWebBundle:Default:index.html.twig"));

        $__internal_8013cdf0a7de5bf9045cda59f60e4870ff8626ba763b9adae6bb4ed53c704562 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8013cdf0a7de5bf9045cda59f60e4870ff8626ba763b9adae6bb4ed53c704562->enter($__internal_8013cdf0a7de5bf9045cda59f60e4870ff8626ba763b9adae6bb4ed53c704562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PortailWebBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_04ae9dcfdcfb903aa7981c8b72ac4102ee0029b2df75791f981a5f4a4a3594b9->leave($__internal_04ae9dcfdcfb903aa7981c8b72ac4102ee0029b2df75791f981a5f4a4a3594b9_prof);

        
        $__internal_8013cdf0a7de5bf9045cda59f60e4870ff8626ba763b9adae6bb4ed53c704562->leave($__internal_8013cdf0a7de5bf9045cda59f60e4870ff8626ba763b9adae6bb4ed53c704562_prof);

    }

    public function getTemplateName()
    {
        return "PortailWebBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "PortailWebBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/Projet6/src/Portail/WebBundle/Resources/views/Default/index.html.twig");
    }
}
