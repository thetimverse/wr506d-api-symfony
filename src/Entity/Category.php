<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\ApiFilter;
use ApiPlatform\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Metadata\Delete;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\Patch;
use ApiPlatform\Metadata\Post;
use ApiPlatform\Metadata\Put;
use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\GraphQl\Query;
use ApiPlatform\Metadata\ApiProperty;
use ApiPlatform\Metadata\GraphQl\DeleteMutation;
use ApiPlatform\Metadata\GraphQl\Mutation;
use ApiPlatform\Metadata\GraphQl\QueryCollection;

/**
 *  Secured resource.
 */
// #[ApiResource]
// #[Get]
// #[Put(security: "is_granted('ROLE_USER') or object.owner == user")]
// #[Post(security: "is_granted('ROLE_USER')")]
// #[Delete(security: "is_granted('ROLE_USER')")]
// #[Patch(security: "is_granted('ROLE_USER') or object.owner == user")]

/**
 *  Secured resource.
 */
#[ApiResource(
    operations: [
        new Get(),
        new Post(security: "is_granted('ROLE_USER')", securityMessage: 'Only admins can add books.'),
        new GetCollection(),
        new Delete(security: "is_granted('ROLE_USER')"),
        new Put(security: "is_granted('ROLE_USER')"),
        new Patch(security: "is_granted('ROLE_USER')"),
    ],
    paginationType: 'page',
    graphQlOperations: [
        new Query(),
        new QueryCollection(),
        new DeleteMutation(security: "is_granted('ROLE_USER')", name: 'delete'),
        new Mutation(security: "is_granted('ROLE_USER')", name: 'create'),
    ]
)]

#[ORM\Entity(repositoryClass: CategoryRepository::class)]
#[ApiFilter(SearchFilter::class, properties: ['name' => 'ipartial'])]
#[ApiResource]
class Category
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\Type('string')]
    private ?string $name = null;

    #[ORM\ManyToMany(targetEntity: Movie::class, inversedBy: 'categories')]
    private Collection $movies;

    public function __construct()
    {
        $this->movies = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, Movie>
     */
    public function getMovies(): Collection
    {
        return $this->movies;
    }

    public function addMovie(Movie $movie): static
    {
        if (!$this->movies->contains($movie)) {
            $this->movies->add($movie);
        }

        return $this;
    }

    public function removeMovie(Movie $movie): static
    {
        $this->movies->removeElement($movie);

        return $this;
    }
}
