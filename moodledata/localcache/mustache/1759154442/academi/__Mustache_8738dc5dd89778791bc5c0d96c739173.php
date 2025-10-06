<?php

class __Mustache_8738dc5dd89778791bc5c0d96c739173 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="ai-course-summarise-controls pt-3 pb-3">
';
        $buffer .= $indent . '    <button class="btn btn-outline-secondary"
';
        $buffer .= $indent . '            aria-controls="ai-drawer"
';
        $buffer .= $indent . '            type="button"
';
        $buffer .= $indent . '            data-action="course-summarise"
';
        $buffer .= $indent . '            data-toggle="tooltip"
';
        $buffer .= $indent . '            data-html="true"
';
        $buffer .= $indent . '            title="';
        $value = $context->find('str');
        $buffer .= $this->section94572120f4ace31fa18b49d04ab5f2b7($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '    >
';
        $buffer .= $indent . '        <span class="ai-course-summarise-sparkles-icon">
';
        $buffer .= $indent . '            ';
        $value = $context->find('pix');
        $buffer .= $this->sectionF1967968069976b25f96292008b4243a($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </span>
';
        $buffer .= $indent . '        <span class="ai-course-summarise-sparkles-icon white">
';
        $buffer .= $indent . '            ';
        $value = $context->find('pix');
        $buffer .= $this->section8ea2306e151e2f09ab949921292891f0($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </span>
';
        $buffer .= $indent . '        ';
        $value = $context->find('str');
        $buffer .= $this->sectionA501457f7255a370b920c890924101c4($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    </button>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section94572120f4ace31fa18b49d04ab5f2b7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' summarise_tooltips, aiplacement_courseassist ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' summarise_tooltips, aiplacement_courseassist ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF1967968069976b25f96292008b4243a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' sparkles, aiplacement_courseassist ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' sparkles, aiplacement_courseassist ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8ea2306e151e2f09ab949921292891f0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' sparkles-white, aiplacement_courseassist ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' sparkles-white, aiplacement_courseassist ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA501457f7255a370b920c890924101c4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' summarise, aiplacement_courseassist ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' summarise, aiplacement_courseassist ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
