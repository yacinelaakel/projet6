<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_5a4a98caf8686541014c99dc7f196f0148a568adb6fbf50dd8f44593814b227f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0d2727666e232a543fcb794e85cf8a3cb139a690a6bab0b70d24a3e438e4e41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0d2727666e232a543fcb794e85cf8a3cb139a690a6bab0b70d24a3e438e4e41->enter($__internal_a0d2727666e232a543fcb794e85cf8a3cb139a690a6bab0b70d24a3e438e4e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_bd6a5468a5a352f7092bff36db5a69de7b005b784790eb03decb024ec223f392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd6a5468a5a352f7092bff36db5a69de7b005b784790eb03decb024ec223f392->enter($__internal_bd6a5468a5a352f7092bff36db5a69de7b005b784790eb03decb024ec223f392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0d2727666e232a543fcb794e85cf8a3cb139a690a6bab0b70d24a3e438e4e41->leave($__internal_a0d2727666e232a543fcb794e85cf8a3cb139a690a6bab0b70d24a3e438e4e41_prof);

        
        $__internal_bd6a5468a5a352f7092bff36db5a69de7b005b784790eb03decb024ec223f392->leave($__internal_bd6a5468a5a352f7092bff36db5a69de7b005b784790eb03decb024ec223f392_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_89f5f3e26f42c4445d1642fe9058ce7e30a889041705f46aa0c08a46d8193324 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89f5f3e26f42c4445d1642fe9058ce7e30a889041705f46aa0c08a46d8193324->enter($__internal_89f5f3e26f42c4445d1642fe9058ce7e30a889041705f46aa0c08a46d8193324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a6c2d7ddddeb3089b15a4f4e1ca4a3380874a4be49b45065cfb8892b4f133ceb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6c2d7ddddeb3089b15a4f4e1ca4a3380874a4be49b45065cfb8892b4f133ceb->enter($__internal_a6c2d7ddddeb3089b15a4f4e1ca4a3380874a4be49b45065cfb8892b4f133ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_a6c2d7ddddeb3089b15a4f4e1ca4a3380874a4be49b45065cfb8892b4f133ceb->leave($__internal_a6c2d7ddddeb3089b15a4f4e1ca4a3380874a4be49b45065cfb8892b4f133ceb_prof);

        
        $__internal_89f5f3e26f42c4445d1642fe9058ce7e30a889041705f46aa0c08a46d8193324->leave($__internal_89f5f3e26f42c4445d1642fe9058ce7e30a889041705f46aa0c08a46d8193324_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Applications/MAMP/htdocs/Projet6/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
