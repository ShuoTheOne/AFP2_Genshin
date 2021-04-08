package com.example.backend.service;

import com.example.backend.controller.dto.*;
import com.example.backend.dao.*;
import com.example.backend.dao.entity.*;
import lombok.*;
import org.apache.commons.codec.digest.DigestUtils;
import org.springframework.stereotype.Service;
import java.time.*;
import java.time.temporal.ChronoUnit;
import java.util.*;
import java.util.stream.Collectors;

@Service
@RequiredArgsConstructor
public class ProductServiceImpl implements ProductService{

    private final ProductRepository productRepository;


    @Override
    public void addProduct(ProductRequest request) {
        Optional.ofNullable(productRepository.getByName(request.getName())).ifPresent(product ->
                {throw new RuntimeException(String.format("%s termék név már foglalt ", product.getName()));}
        );

        Product product = Product.addProduct(request);
        productRepository.save(product);
    }

    @Override
    public List<ProductRequest> getProduct() {
         return productRepository.findAll().stream().map(Product::toProductRequest).collect(Collectors.toList());
    }
}
