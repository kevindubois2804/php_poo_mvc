<?php
class livre
{
    private int $id;
    private string $imageUrl;
    private string $titre;
    private int $nbDePages;

    public function __construct(int $id, $titre, $url, $nbDePages)
    {
        $image = file_get_contents($url);
        $filename = pathinfo($url, PATHINFO_FILENAME);
        $path = 'public/images/' . $filename . '.jpg';
        file_put_contents($path, $image);
        $this->imageUrl = $path;
        $this->titre = $titre;
        $this->nbDePages = $nbDePages;
    }

    /**
     * Get the value of id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the value of image
     *
     * @return string
     */
    public function getImage(): string
    {
        return $this->imageUrl;
    }

    /**
     * Get the value of titre
     *
     * @return string
     */
    public function getTitre(): string
    {
        return $this->titre;
    }

    /**
     * Get the value of nbDePages
     *
     * @return int
     */
    public function getNbDePages(): int
    {
        return $this->nbDePages;
    }
}
