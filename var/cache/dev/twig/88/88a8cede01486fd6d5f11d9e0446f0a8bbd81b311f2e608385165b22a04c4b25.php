<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_f99e02fe4a229633f2654944d416bc22a84dd54593204dce3594ac26214ddfc4 extends Twig_Template
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
        $__internal_81cb1e3bbd45ef718f30742ab80eb1dda588562e52f26e5a0ac3bc151bb4c40a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81cb1e3bbd45ef718f30742ab80eb1dda588562e52f26e5a0ac3bc151bb4c40a->enter($__internal_81cb1e3bbd45ef718f30742ab80eb1dda588562e52f26e5a0ac3bc151bb4c40a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_49a27b37d231744bff95158c25e110b4ede6355c59d536760086ab01f8b8b0ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49a27b37d231744bff95158c25e110b4ede6355c59d536760086ab01f8b8b0ce->enter($__internal_49a27b37d231744bff95158c25e110b4ede6355c59d536760086ab01f8b8b0ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_81cb1e3bbd45ef718f30742ab80eb1dda588562e52f26e5a0ac3bc151bb4c40a->leave($__internal_81cb1e3bbd45ef718f30742ab80eb1dda588562e52f26e5a0ac3bc151bb4c40a_prof);

        
        $__internal_49a27b37d231744bff95158c25e110b4ede6355c59d536760086ab01f8b8b0ce->leave($__internal_49a27b37d231744bff95158c25e110b4ede6355c59d536760086ab01f8b8b0ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
