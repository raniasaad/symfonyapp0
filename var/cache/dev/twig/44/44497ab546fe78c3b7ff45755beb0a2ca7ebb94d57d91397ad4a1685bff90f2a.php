<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_6c969ad7239d1bd344c8e77d30f44972b08d585b18e3adba66730cdde32563eb extends Twig_Template
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
        $__internal_224b9bdce7e8d2132d60b808cc1e9fc2a5bf655b7b0dea01bc1120248638bea9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_224b9bdce7e8d2132d60b808cc1e9fc2a5bf655b7b0dea01bc1120248638bea9->enter($__internal_224b9bdce7e8d2132d60b808cc1e9fc2a5bf655b7b0dea01bc1120248638bea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_f8be20214c0040818bd2c7d0d0625ae43a2c86fc187a76bad767250a85637795 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8be20214c0040818bd2c7d0d0625ae43a2c86fc187a76bad767250a85637795->enter($__internal_f8be20214c0040818bd2c7d0d0625ae43a2c86fc187a76bad767250a85637795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_224b9bdce7e8d2132d60b808cc1e9fc2a5bf655b7b0dea01bc1120248638bea9->leave($__internal_224b9bdce7e8d2132d60b808cc1e9fc2a5bf655b7b0dea01bc1120248638bea9_prof);

        
        $__internal_f8be20214c0040818bd2c7d0d0625ae43a2c86fc187a76bad767250a85637795->leave($__internal_f8be20214c0040818bd2c7d0d0625ae43a2c86fc187a76bad767250a85637795_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
