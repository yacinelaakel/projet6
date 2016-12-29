<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_462a1ca018458cfc2eea4660297591fe35129192fbf19c7b5d06cb074bfbb934 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_53ed9ccf867497fc7499bab26748a5c567b165fcbdae0690147cdebf751a207b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53ed9ccf867497fc7499bab26748a5c567b165fcbdae0690147cdebf751a207b->enter($__internal_53ed9ccf867497fc7499bab26748a5c567b165fcbdae0690147cdebf751a207b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_64d450ea8300d27aad740cc2ea70df21464bf590dfc02b22dc843edd020874fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64d450ea8300d27aad740cc2ea70df21464bf590dfc02b22dc843edd020874fc->enter($__internal_64d450ea8300d27aad740cc2ea70df21464bf590dfc02b22dc843edd020874fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53ed9ccf867497fc7499bab26748a5c567b165fcbdae0690147cdebf751a207b->leave($__internal_53ed9ccf867497fc7499bab26748a5c567b165fcbdae0690147cdebf751a207b_prof);

        
        $__internal_64d450ea8300d27aad740cc2ea70df21464bf590dfc02b22dc843edd020874fc->leave($__internal_64d450ea8300d27aad740cc2ea70df21464bf590dfc02b22dc843edd020874fc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_00ab3233e5c257c6aa6cca261ce8369ad2ddf8c3bbdd43b9427b6f9ef1be05a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00ab3233e5c257c6aa6cca261ce8369ad2ddf8c3bbdd43b9427b6f9ef1be05a0->enter($__internal_00ab3233e5c257c6aa6cca261ce8369ad2ddf8c3bbdd43b9427b6f9ef1be05a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_eab454a8b10e8895c873dd884e3d73415f1bed361942d8bc8409198b53758599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eab454a8b10e8895c873dd884e3d73415f1bed361942d8bc8409198b53758599->enter($__internal_eab454a8b10e8895c873dd884e3d73415f1bed361942d8bc8409198b53758599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_eab454a8b10e8895c873dd884e3d73415f1bed361942d8bc8409198b53758599->leave($__internal_eab454a8b10e8895c873dd884e3d73415f1bed361942d8bc8409198b53758599_prof);

        
        $__internal_00ab3233e5c257c6aa6cca261ce8369ad2ddf8c3bbdd43b9427b6f9ef1be05a0->leave($__internal_00ab3233e5c257c6aa6cca261ce8369ad2ddf8c3bbdd43b9427b6f9ef1be05a0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3ae8a6656caa9022e2e69daf7f6a217abb14d089bdbe848db31ab6eed2442751 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ae8a6656caa9022e2e69daf7f6a217abb14d089bdbe848db31ab6eed2442751->enter($__internal_3ae8a6656caa9022e2e69daf7f6a217abb14d089bdbe848db31ab6eed2442751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9f018a2d9500be4600d913cc0cce60e256c89eed9f1104dd70f6d7e22edc7f50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f018a2d9500be4600d913cc0cce60e256c89eed9f1104dd70f6d7e22edc7f50->enter($__internal_9f018a2d9500be4600d913cc0cce60e256c89eed9f1104dd70f6d7e22edc7f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9f018a2d9500be4600d913cc0cce60e256c89eed9f1104dd70f6d7e22edc7f50->leave($__internal_9f018a2d9500be4600d913cc0cce60e256c89eed9f1104dd70f6d7e22edc7f50_prof);

        
        $__internal_3ae8a6656caa9022e2e69daf7f6a217abb14d089bdbe848db31ab6eed2442751->leave($__internal_3ae8a6656caa9022e2e69daf7f6a217abb14d089bdbe848db31ab6eed2442751_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5d8ced4130f17ff4d06db9035c32657c772849b16db19ad20fd2a3fcd8b76c35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d8ced4130f17ff4d06db9035c32657c772849b16db19ad20fd2a3fcd8b76c35->enter($__internal_5d8ced4130f17ff4d06db9035c32657c772849b16db19ad20fd2a3fcd8b76c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7912ecce985bb8793c91ac78f2d80fb1975a0ee35b02961de55d526b13408c8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7912ecce985bb8793c91ac78f2d80fb1975a0ee35b02961de55d526b13408c8a->enter($__internal_7912ecce985bb8793c91ac78f2d80fb1975a0ee35b02961de55d526b13408c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7912ecce985bb8793c91ac78f2d80fb1975a0ee35b02961de55d526b13408c8a->leave($__internal_7912ecce985bb8793c91ac78f2d80fb1975a0ee35b02961de55d526b13408c8a_prof);

        
        $__internal_5d8ced4130f17ff4d06db9035c32657c772849b16db19ad20fd2a3fcd8b76c35->leave($__internal_5d8ced4130f17ff4d06db9035c32657c772849b16db19ad20fd2a3fcd8b76c35_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/Projet6/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
