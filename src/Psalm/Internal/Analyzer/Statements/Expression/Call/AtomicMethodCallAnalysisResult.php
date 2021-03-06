<?php
namespace Psalm\Internal\Analyzer\Statements\Expression\Call;

use Psalm\Type;

class AtomicMethodCallAnalysisResult
{
    /**
     * @var ?Type\Union
     */
    public $return_type;

    /**
     * @var bool
     */
    public $returns_by_ref = false;

    /**
     * @var bool
     */
    public $has_mock = false;

    /**
     * @var bool
     */
    public $has_valid_method_call_type = false;

    /**
     * @var bool
     */
    public $has_mixed_method_call = false;

    /**
     * @var array<string>
     */
    public $invalid_method_call_types = [];

    /**
     * @var array<string>
     */
    public $existent_method_ids = [];

    /**
     * @var array<string>
     */
    public $non_existent_class_method_ids = [];

    /**
     * @var array<string>
     */
    public $non_existent_interface_method_ids = [];

    /**
     * @var array<string>
     */
    public $non_existent_magic_method_ids = [];

    /**
     * @var bool
     */
    public $check_visibility = true;
}
