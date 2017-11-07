<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_570314277667910dffb1e96957baf5d9a0f37cab244601783ae64ab670080741 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8244a48437ce18742bd4ec5dfd49fb44543ad4bab64542859e02e8f0746cb623 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8244a48437ce18742bd4ec5dfd49fb44543ad4bab64542859e02e8f0746cb623->enter($__internal_8244a48437ce18742bd4ec5dfd49fb44543ad4bab64542859e02e8f0746cb623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_d5ecca727bf41e399e5ce1c20fa9e3d788e1c7e05706c3979d82052865312ec5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5ecca727bf41e399e5ce1c20fa9e3d788e1c7e05706c3979d82052865312ec5->enter($__internal_d5ecca727bf41e399e5ce1c20fa9e3d788e1c7e05706c3979d82052865312ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8244a48437ce18742bd4ec5dfd49fb44543ad4bab64542859e02e8f0746cb623->leave($__internal_8244a48437ce18742bd4ec5dfd49fb44543ad4bab64542859e02e8f0746cb623_prof);

        
        $__internal_d5ecca727bf41e399e5ce1c20fa9e3d788e1c7e05706c3979d82052865312ec5->leave($__internal_d5ecca727bf41e399e5ce1c20fa9e3d788e1c7e05706c3979d82052865312ec5_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2dba861110a3b52f959575456ff4f5afb8ad40c0acfdbddc9878d432b52700f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dba861110a3b52f959575456ff4f5afb8ad40c0acfdbddc9878d432b52700f7->enter($__internal_2dba861110a3b52f959575456ff4f5afb8ad40c0acfdbddc9878d432b52700f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_49e0e33f40f15a6d24fd1d2ee3e0f2b27ea30a93e083478724ea17acea00d42d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49e0e33f40f15a6d24fd1d2ee3e0f2b27ea30a93e083478724ea17acea00d42d->enter($__internal_49e0e33f40f15a6d24fd1d2ee3e0f2b27ea30a93e083478724ea17acea00d42d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_49e0e33f40f15a6d24fd1d2ee3e0f2b27ea30a93e083478724ea17acea00d42d->leave($__internal_49e0e33f40f15a6d24fd1d2ee3e0f2b27ea30a93e083478724ea17acea00d42d_prof);

        
        $__internal_2dba861110a3b52f959575456ff4f5afb8ad40c0acfdbddc9878d432b52700f7->leave($__internal_2dba861110a3b52f959575456ff4f5afb8ad40c0acfdbddc9878d432b52700f7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
