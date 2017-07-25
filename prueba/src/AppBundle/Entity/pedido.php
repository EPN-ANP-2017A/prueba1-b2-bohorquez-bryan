<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * pedido
 *
 * @ORM\Table(name="pedido")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\pedidoRepository")
 */
class pedido
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
	
	/**
     * @ORM\ManyToOne(targetEntity="cliente", inversedBy="pedidos")
     * @ORM\JoinColumn(name="cliente_id", referencedColumnName="id")
     */
    private $clientes;
    
	/**
     * @ORM\ManyToOne(targetEntity="plato", inversedBy="pedidos")
     * @ORM\JoinColumn(name="plato_id", referencedColumnName="id")
     */
    private $platos;
	
	/**
     * @var int
     *
     * @ORM\Column(name="cantidad", type="integer")
     * 
     */
    private $cantidad;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set clientes
     *
     * @param \AppBundle\Entity\cliente $clientes
     *
     * @return pedido
     */
    public function setClientes(\AppBundle\Entity\cliente $clientes = null)
    {
        $this->clientes = $clientes;

        return $this;
    }

    /**
     * Get clientes
     *
     * @return \AppBundle\Entity\cliente
     */
    public function getClientes()
    {
        return $this->clientes;
    }

    /**
     * Add plato
     *
     * @param \AppBundle\Entity\plato $plato
     *
     * @return pedido
     */
    public function addPlato(\AppBundle\Entity\plato $plato)
    {
        $this->platos[] = $plato;

        return $this;
    }

    /**
     * Remove plato
     *
     * @param \AppBundle\Entity\plato $plato
     */
    public function removePlato(\AppBundle\Entity\plato $plato)
    {
        $this->platos->removeElement($plato);
    }

    /**
     * Get platos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPlatos()
    {
        return $this->platos;
    }
	

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     *
     * @return pedido
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set platos
     *
     * @param \AppBundle\Entity\plato $platos
     *
     * @return pedido
     */
    public function setPlatos(\AppBundle\Entity\plato $platos = null)
    {
        $this->platos = $platos;

        return $this;
    }
}
