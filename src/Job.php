<?php namespace JobBrander\Jobs\Client;

/**
 * @method Job addDates($value)
 * @method Job addSalaries($value)
 * @method Job addCodes($value)
 * @method Job getId($value)
 * @method Job getTitle($value)
 * @method Job getDescription($value)
 * @method Job getSource($value)
 * @method Job getUrl($value)
 * @method Job getQuery($value)
 * @method Job getType($value)
 * @method Job getCompany($value)
 * @method Job getLocation($value)
 * @method Job getIndustry($value)
 * @method Job getDates($value)
 * @method Job getSalaries($value)
 * @method Job getCodes($value)
 * @method Job setId($value)
 * @method Job setTitle($value)
 * @method Job setDescription($value)
 * @method Job setSource($value)
 * @method Job setUrl($value)
 * @method Job setQuery($value)
 * @method Job setType($value)
 * @method Job setStartDate($value)
 * @method Job setEndDate($value)
 * @method Job setMinimumSalary($value)
 * @method Job setMaximumSalary($value)
 * @method Job setCompany($value)
 * @method Job setLocation($value)
 * @method Job setIndustry($value)
 * @method Job setCodes($value)
 */
class Job
{
    use AttributeTrait;

    /**
     * Job Id
     *
     * @var string
     */
    protected $id;

    /**
     * Job Title
     *
     * @var string
     */
    protected $title;

    /**
     * Job Description
     *
     * @var string
     */
    protected $description;

    /**
     * Job Source
     *
     * @var string
     */
    protected $source;

    /**
     * Job Url
     *
     * @var string
     */
    protected $url;

    /**
     * Job Query
     *
     * @var string
     */
    protected $query;

    /**
     * Job Type
     *
     * @var string
     */
    protected $type;

    /**
     * Job Start Date
     *
     * @var string
     */
    protected $startDate;

    /**
     * Job End Date
     *
     * @var string
     */
    protected $endDate;

    /**
     * Job Minimum Salary
     *
     * @var string
     */
    protected $minimumSalary;

    /**
     * Job Maximum Salary
     *
     * @var string
     */
    protected $maximumSalary;

    /**
     * Job Company
     *
     * @var string
     */
    protected $company;

    /**
     * Job Location
     *
     * @var string
     */
    protected $location;

    /**
     * Job Industry
     *
     * @var string
     */
    protected $industry;

    /**
     * Job Codes
     *
     * @var array
     */
    protected $codes = [];

    /**
     * Create new job
     *
     * @param array $attributes
     */
    public function __construct($attributes = [])
    {
        array_walk($attributes, function ($value, $key) {
            $this->{$key} = $value;
        });
    }
}
