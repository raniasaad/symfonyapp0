<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_62b8a723da0e14649e14c99bbf3f3dc95824e29bd9b9d04e73548f3db6182a8c extends Twig_Template
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
        $__internal_61d195422b2f2dd744c1809e5a8f471f658c31d3af978283db60c63993f7d0d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61d195422b2f2dd744c1809e5a8f471f658c31d3af978283db60c63993f7d0d0->enter($__internal_61d195422b2f2dd744c1809e5a8f471f658c31d3af978283db60c63993f7d0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_626b58173a5fd50808fc88190b20023bbb8803fde641587677dd4cadc565269e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_626b58173a5fd50808fc88190b20023bbb8803fde641587677dd4cadc565269e->enter($__internal_626b58173a5fd50808fc88190b20023bbb8803fde641587677dd4cadc565269e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_61d195422b2f2dd744c1809e5a8f471f658c31d3af978283db60c63993f7d0d0->leave($__internal_61d195422b2f2dd744c1809e5a8f471f658c31d3af978283db60c63993f7d0d0_prof);

        
        $__internal_626b58173a5fd50808fc88190b20023bbb8803fde641587677dd4cadc565269e->leave($__internal_626b58173a5fd50808fc88190b20023bbb8803fde641587677dd4cadc565269e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
