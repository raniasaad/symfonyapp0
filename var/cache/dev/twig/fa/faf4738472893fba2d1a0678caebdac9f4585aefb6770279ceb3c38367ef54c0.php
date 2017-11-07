<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_fea366a6e6ea40873f70ebdc4182fddc4a73c9db5a72706ff8b614b54e8aa012 extends Twig_Template
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
        $__internal_135d1e3183d51e3a0b9c7abecbed5e68e696b1ed705d1e0959d4983d0904d1ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_135d1e3183d51e3a0b9c7abecbed5e68e696b1ed705d1e0959d4983d0904d1ee->enter($__internal_135d1e3183d51e3a0b9c7abecbed5e68e696b1ed705d1e0959d4983d0904d1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_02dcf6f1e31a8a607304ec49475b6ff621be1d0771962f7ee9309dafd4d0f5f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02dcf6f1e31a8a607304ec49475b6ff621be1d0771962f7ee9309dafd4d0f5f7->enter($__internal_02dcf6f1e31a8a607304ec49475b6ff621be1d0771962f7ee9309dafd4d0f5f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_135d1e3183d51e3a0b9c7abecbed5e68e696b1ed705d1e0959d4983d0904d1ee->leave($__internal_135d1e3183d51e3a0b9c7abecbed5e68e696b1ed705d1e0959d4983d0904d1ee_prof);

        
        $__internal_02dcf6f1e31a8a607304ec49475b6ff621be1d0771962f7ee9309dafd4d0f5f7->leave($__internal_02dcf6f1e31a8a607304ec49475b6ff621be1d0771962f7ee9309dafd4d0f5f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
