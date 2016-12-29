<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_1c2610247c2699547dbe923227a0a5cfe5a3ef83069ffaebf6abd5bcdb24628d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_6983dcb55d9f23904f12501bbedc57331a99e621c6e0f17965736d8568105c4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6983dcb55d9f23904f12501bbedc57331a99e621c6e0f17965736d8568105c4d->enter($__internal_6983dcb55d9f23904f12501bbedc57331a99e621c6e0f17965736d8568105c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ff88083d89f32088e90b67f05856d13d41893a581ff245655ae51f75b37d6683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff88083d89f32088e90b67f05856d13d41893a581ff245655ae51f75b37d6683->enter($__internal_ff88083d89f32088e90b67f05856d13d41893a581ff245655ae51f75b37d6683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6983dcb55d9f23904f12501bbedc57331a99e621c6e0f17965736d8568105c4d->leave($__internal_6983dcb55d9f23904f12501bbedc57331a99e621c6e0f17965736d8568105c4d_prof);

        
        $__internal_ff88083d89f32088e90b67f05856d13d41893a581ff245655ae51f75b37d6683->leave($__internal_ff88083d89f32088e90b67f05856d13d41893a581ff245655ae51f75b37d6683_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a3506d259139e5a489aab75edf5dbe17fe6089a3a2a7eadbaecc1ef03603a50f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3506d259139e5a489aab75edf5dbe17fe6089a3a2a7eadbaecc1ef03603a50f->enter($__internal_a3506d259139e5a489aab75edf5dbe17fe6089a3a2a7eadbaecc1ef03603a50f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2b114c8ed65090106e73310836e09ebaeeffb8135579d58857e3ac2740769e3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b114c8ed65090106e73310836e09ebaeeffb8135579d58857e3ac2740769e3f->enter($__internal_2b114c8ed65090106e73310836e09ebaeeffb8135579d58857e3ac2740769e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_2b114c8ed65090106e73310836e09ebaeeffb8135579d58857e3ac2740769e3f->leave($__internal_2b114c8ed65090106e73310836e09ebaeeffb8135579d58857e3ac2740769e3f_prof);

        
        $__internal_a3506d259139e5a489aab75edf5dbe17fe6089a3a2a7eadbaecc1ef03603a50f->leave($__internal_a3506d259139e5a489aab75edf5dbe17fe6089a3a2a7eadbaecc1ef03603a50f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ef1558383fe217236f5671a2895e1ae86f09f70b23b9d151d6cec4035e5eb5a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef1558383fe217236f5671a2895e1ae86f09f70b23b9d151d6cec4035e5eb5a4->enter($__internal_ef1558383fe217236f5671a2895e1ae86f09f70b23b9d151d6cec4035e5eb5a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d045da7bc752e04fa79e893aefbfff3694f9d0cebc7e717c4fc8307580939fa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d045da7bc752e04fa79e893aefbfff3694f9d0cebc7e717c4fc8307580939fa8->enter($__internal_d045da7bc752e04fa79e893aefbfff3694f9d0cebc7e717c4fc8307580939fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d045da7bc752e04fa79e893aefbfff3694f9d0cebc7e717c4fc8307580939fa8->leave($__internal_d045da7bc752e04fa79e893aefbfff3694f9d0cebc7e717c4fc8307580939fa8_prof);

        
        $__internal_ef1558383fe217236f5671a2895e1ae86f09f70b23b9d151d6cec4035e5eb5a4->leave($__internal_ef1558383fe217236f5671a2895e1ae86f09f70b23b9d151d6cec4035e5eb5a4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_799532f618709497ab416e123203d4f464bda698a4d8bca49de411954afca502 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_799532f618709497ab416e123203d4f464bda698a4d8bca49de411954afca502->enter($__internal_799532f618709497ab416e123203d4f464bda698a4d8bca49de411954afca502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cc7fa7d631abacf2414675318c992e7c8597286237dd371d07b9c71efe754f8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc7fa7d631abacf2414675318c992e7c8597286237dd371d07b9c71efe754f8e->enter($__internal_cc7fa7d631abacf2414675318c992e7c8597286237dd371d07b9c71efe754f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_cc7fa7d631abacf2414675318c992e7c8597286237dd371d07b9c71efe754f8e->leave($__internal_cc7fa7d631abacf2414675318c992e7c8597286237dd371d07b9c71efe754f8e_prof);

        
        $__internal_799532f618709497ab416e123203d4f464bda698a4d8bca49de411954afca502->leave($__internal_799532f618709497ab416e123203d4f464bda698a4d8bca49de411954afca502_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/Projet6/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
