<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_3c91a58fb73f2e39eecca3c3988711d4fcd17476b413cced255703c7e475fbc6 extends Twig_Template
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
        $__internal_51889840f7b373655712ca7899acc62713465fbefb5ac166b44229a15fd8f6ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51889840f7b373655712ca7899acc62713465fbefb5ac166b44229a15fd8f6ac->enter($__internal_51889840f7b373655712ca7899acc62713465fbefb5ac166b44229a15fd8f6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_cb05aa19ebeebfdfd4e10bdf1def2c7faf6faf0518b70f21530aac94ce3d6e5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb05aa19ebeebfdfd4e10bdf1def2c7faf6faf0518b70f21530aac94ce3d6e5d->enter($__internal_cb05aa19ebeebfdfd4e10bdf1def2c7faf6faf0518b70f21530aac94ce3d6e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_51889840f7b373655712ca7899acc62713465fbefb5ac166b44229a15fd8f6ac->leave($__internal_51889840f7b373655712ca7899acc62713465fbefb5ac166b44229a15fd8f6ac_prof);

        
        $__internal_cb05aa19ebeebfdfd4e10bdf1def2c7faf6faf0518b70f21530aac94ce3d6e5d->leave($__internal_cb05aa19ebeebfdfd4e10bdf1def2c7faf6faf0518b70f21530aac94ce3d6e5d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
