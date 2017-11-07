<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_ac356e5ddff37a98c3bcaba6b0b67707d640239514ba997887b6759132f39d64 extends Twig_Template
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
        $__internal_4589cc20bcd08e2f0a41632184f167a1b4beae3a0fb739c64ce28fa155655d9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4589cc20bcd08e2f0a41632184f167a1b4beae3a0fb739c64ce28fa155655d9f->enter($__internal_4589cc20bcd08e2f0a41632184f167a1b4beae3a0fb739c64ce28fa155655d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_3bba14a8a51b0156e552b0392daa418249a2981e987f0cc25fd73114f841fb52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bba14a8a51b0156e552b0392daa418249a2981e987f0cc25fd73114f841fb52->enter($__internal_3bba14a8a51b0156e552b0392daa418249a2981e987f0cc25fd73114f841fb52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_4589cc20bcd08e2f0a41632184f167a1b4beae3a0fb739c64ce28fa155655d9f->leave($__internal_4589cc20bcd08e2f0a41632184f167a1b4beae3a0fb739c64ce28fa155655d9f_prof);

        
        $__internal_3bba14a8a51b0156e552b0392daa418249a2981e987f0cc25fd73114f841fb52->leave($__internal_3bba14a8a51b0156e552b0392daa418249a2981e987f0cc25fd73114f841fb52_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}
