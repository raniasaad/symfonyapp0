<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_8e2991bbff8e70d34881c8fbae6dcefd76e90ebbcf03559f2d2ec293a315ec44 extends Twig_Template
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
        $__internal_c3e083629c6519402a67709889233bbdca5c475878beac3f00d971b7146e4439 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3e083629c6519402a67709889233bbdca5c475878beac3f00d971b7146e4439->enter($__internal_c3e083629c6519402a67709889233bbdca5c475878beac3f00d971b7146e4439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_ea0685f48600973bcdc77de98fe51940a1c26db699bdc96d41a6b4bfc4869ee4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea0685f48600973bcdc77de98fe51940a1c26db699bdc96d41a6b4bfc4869ee4->enter($__internal_ea0685f48600973bcdc77de98fe51940a1c26db699bdc96d41a6b4bfc4869ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_c3e083629c6519402a67709889233bbdca5c475878beac3f00d971b7146e4439->leave($__internal_c3e083629c6519402a67709889233bbdca5c475878beac3f00d971b7146e4439_prof);

        
        $__internal_ea0685f48600973bcdc77de98fe51940a1c26db699bdc96d41a6b4bfc4869ee4->leave($__internal_ea0685f48600973bcdc77de98fe51940a1c26db699bdc96d41a6b4bfc4869ee4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
