<?php

namespace BankBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 *
 * @ORM\Table(name="operation")
 * @ORM\Entity(repositoryClass="BankBundle\Repository\OperationRepository")
 */
class Operation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string",length=200, nullable=false)
     */
    private $label;
    /**
     * @var string
     *
     * @ORM\Column(name="reference_cheque", type="string",length=200, nullable=true)
     */
    private $reference_cheque;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;
    /**
     * @var double
     *
     * @ORM\Column(name="amount", type="decimal",scale=2,precision=10, nullable=false)
     */
    private $amount;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pointed", type="boolean", nullable=false)
     */
    private $pointed = false;

    /**
     * @var Account
     *
     * @ORM\ManyToOne(targetEntity="BankBundle\Entity\Account",inversedBy="operations")
     * @ORM\JoinColumn(name="account_id",nullable=false)
     */
    private $account;

    /**
     * @var OperationCategory
     *
     * @ORM\ManyToOne(targetEntity="BankBundle\Entity\OperationCategory",inversedBy="operations")
     * @ORM\JoinColumn(name="operation_category_id",nullable=false)
     */
    private $category;

    /**
     * @var OperationTiers
     *
     * @ORM\ManyToOne(targetEntity="BankBundle\Entity\OperationTiers",inversedBy="operations")
     * @ORM\JoinColumn(name="operation_tiers_id",nullable=false)
     */
    private $tiers;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set label.
     *
     * @param string $label
     *
     * @return Operation
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label.
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set amount.
     *
     * @param string $amount
     *
     * @return Operation
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount.
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set pointed.
     *
     * @param bool $pointed
     *
     * @return Operation
     */
    public function setPointed($pointed)
    {
        $this->pointed = $pointed;

        return $this;
    }

    /**
     * Get pointed.
     *
     * @return bool
     */
    public function getPointed()
    {
        return $this->pointed;
    }

    /**
     * Set account.
     *
     * @param \BankBundle\Entity\Account $account
     *
     * @return Operation
     */
    public function setAccount(\BankBundle\Entity\Account $account)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Get account.
     *
     * @return \BankBundle\Entity\Account
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Set category.
     *
     * @param \BankBundle\Entity\OperationCategory $category
     *
     * @return Operation
     */
    public function setCategory(\BankBundle\Entity\OperationCategory $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category.
     *
     * @return \BankBundle\Entity\OperationCategory
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set tiers.
     *
     * @param \BankBundle\Entity\OperationTiers $tiers
     *
     * @return Operation
     */
    public function setTiers(\BankBundle\Entity\OperationTiers $tiers)
    {
        $this->tiers = $tiers;

        return $this;
    }

    /**
     * Get tiers.
     *
     * @return \BankBundle\Entity\OperationTiers
     */
    public function getTiers()
    {
        return $this->tiers;
    }

    /**
     * Set referenceCheque.
     *
     * @param string|null $referenceCheque
     *
     * @return Operation
     */
    public function setReferenceCheque($referenceCheque = null)
    {
        $this->reference_cheque = $referenceCheque;

        return $this;
    }

    /**
     * Get referenceCheque.
     *
     * @return string|null
     */
    public function getReferenceCheque()
    {
        return $this->reference_cheque;
    }

    /**
     * Set date.
     *
     * @param \DateTime|null $date
     *
     * @return Operation
     */
    public function setDate($date = null)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date.
     *
     * @return \DateTime|null
     */
    public function getDate()
    {
        return $this->date;
    }
}
