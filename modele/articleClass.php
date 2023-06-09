<?php
class Article
{
	private $id_article;
	private $nom_article;
	private $montant_piece;
	private $quantite;
	private $id_motif;
	private $id_retour;
    private $etat_client;

	function __construct(
		int $id_article = 0,
		string $nom_article = '',
		float $montant_piece = 0.00,
		int $quantite = 1,
		int $id_motif = 0,
		int $id_retour = 0,
        string $etat_client= 'actif'

	) {
		$this->id_article	    	= $id_article;
		$this->nom_article		= $nom_article;
		$this->montant_piece= $montant_piece;
		$this->quantite	= $quantite;
		$this->id_motif	= $id_motif;
		$this->id_retour	= $id_retour;
        $this->etat_client= $etat_client;
	}

	function getId_article(): int
	{
		return $this->id_article;
	}
	function setId_article(int $id_article)
	{
		$this->id_article = $id_article;
	}

	function getNom_article(): string
	{
		return $this->nom_article;
	}
	function setNom_article(string $nom_article)
	{
		$this->nom_article = $nom_article;
	}

	function getMontant_piece(): float
	{
		return $this->montant_piece;
	}
	function setMontant_piece(float $montant_piece)
	{
		$this->montant_piece = $montant_piece;
	}

	function getQuantite(): int
	{
		return $this->quantite;
	}
	function setQuantite(string $quantite)
	{
		$this->quantite = $quantite;
	}

	function getId_motif(): int
	{
		return $this->id_motif;
	}
	function setId_motif(int $id_motif)
	{
		$this->id_motif = $id_motif;
	}

	function getId_retour(): int
	{
		return $this->id_retour;
	}
	function setId_retour(int $id_retour)
	{
		$this->id_retour = $id_retour;
    } 
	function getEtat_client()
	{
		return $this->etat_client;
	}
	function setEtat_client( $etat_client)
	{
		$this->etat_client = $etat_client;
	}
}
